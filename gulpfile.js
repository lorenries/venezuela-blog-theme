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
  uglify = require('gulp-uglify'),
  beautify = require('gulp-beautify'),

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
  .pipe(sourcemaps.write(scss + 'maps'))
  .pipe(gulp.dest(root));
});

gulp.task('uncss', function() {
  return gulp.src(root + 'style.css')
      .pipe(uncss({
          html: ['http://hhvm.hgv.test/', 'http://hhvm.hgv.test/?p=609']
      }))
      .pipe(gulp.dest(root));
});

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

gulp.task('pretty-js', function() {
  return gulp.src([js + '*.js'])
  .pipe(beautify({indent_size: 2}))
  .pipe(gulp.dest(js));
});

gulp.task('ugly-js', function() {
  return gulp.src([js + '*.js'])
  .pipe(uglify())
  .pipe(gulp.dest(js));
});



// Watch and hot reload PHP, CSS/SASS, and JS
gulp.task('serve', ['css'], function() {

    browserSync.init({
      open: 'external',
      proxy: 'http://hhvm.hgv.test',
      port: 8080
    });

    gulp.watch(js + '**/*.js', ['javascript']);
    gulp.watch(root + '**/*.scss', ['css']);
    gulp.watch(['./*.php', root + 'style.css', js + '*.js']).on('change', browserSync.reload);
});

// Default task (runs at initiation: gulp --verbose)
gulp.task('default', ['serve']);