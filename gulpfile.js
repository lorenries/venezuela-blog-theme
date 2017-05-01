var gulp = require('gulp'),
  // Prepare and optimize code etc
  autoprefixer = require('autoprefixer'),
  browserSync = require('browser-sync').create(),
  image = require('gulp-image'),
  jshint = require('gulp-jshint'),
  postcss = require('gulp-postcss'),
  sass = require('gulp-sass'),
  sourcemaps = require('gulp-sourcemaps'),
  uncss  = require('gulp-uncss'),

  // Only work with new or updated files
  newer = require('gulp-newer'),

  // Name of working theme folder
  root = './',
  scss = root + 'sass/',
  js = root + 'js/',
  img = root + 'images/',
  languages = root + 'languages/';


// CSS via Sass and Autoprefixer
gulp.task('css', function() {
  return gulp.src(scss + '{style.scss,rtl.scss}')
  .pipe(sourcemaps.init())
  .pipe(sass({
    outputStyle: 'compressed'
  }).on('error', sass.logError))
  .pipe(postcss([
    autoprefixer('last 2 versions', '> 1%')
  ]))
  .pipe(uncss({
    html: ['http://hhvm.hgv.test/', 'http://hhvm.hgv.test/?p=609']
  }))  
  .pipe(sourcemaps.write(scss + 'maps'))
  .pipe(gulp.dest(root));
});

// gulp.task('uncss', function() {
//   return gulp.src(root + 'style.css')
//       .pipe(uncss({
//           html: ['http://hhvm.hgv.dev']
//       }))
//       .pipe(gulp.dest(root));
// });

// Optimize images through gulp-image
gulp.task('images', function() {
  return gulp.src(img + 'RAW/**/*.{jpg,JPG,png}')
  .pipe(newer(img))
  .pipe(image())
  .pipe(gulp.dest(img));
});

// JavaScript
gulp.task('javascript', function() {
  return gulp.src([js + '*.js'])
  .pipe(jshint())
  .pipe(jshint.reporter('default'))
  .pipe(gulp.dest(js));
});


// Watch everything
gulp.task('watch', function() {
  browserSync.init({ 
    open: 'external',
    proxy: 'http://hhvm.hgv.test',
    port: 8080
  });
  gulp.watch([root + '**/*.css', root + '**/*.scss' ], ['css']);
  gulp.watch(js + '**/*.js', ['javascript']);
  gulp.watch(img + 'RAW/**/*.{jpg,JPG,png}', ['images']);
  gulp.watch(root + '**/*').on('change', browserSync.reload);
});


// Default task (runs at initiation: gulp --verbose)
gulp.task('default', ['watch']);