var gulp = require('gulp');
var browserSync = require('browser-sync').create();
var sass = require('gulp-sass');
var wiredep = require('wiredep').stream;

// Paleisti serveri
gulp.task('browser-sync', function(){
  browserSync.init({
    server: {
      baseDir: "./"
    }
  });
});

// Kompiliuoti CSS
gulp.task('styles', function() {
  return gulp.src('./styles/**/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('./dist/styles'))
    .pipe(browserSync.stream());
});

gulp.task('wiredep-html', function() {
  gulp.src('./index.html')
    .pipe(wiredep())
    .pipe(gulp.dest('./'));
});

gulp.task('wiredep-scss', function() {
  gulp.src('./styles/main.scss')
    .pipe(wiredep())
    .pipe(gulp.dest('./styles'));
});


// Atnaujinti browser, kai pakeiciami SCSS failai
// Pradedam developint
gulp.task('watch', ['wiredep-html', 'wiredep-scss', 'browser-sync', 'styles'], function(){
  gulp.watch('./styles/**/*.scss', ['styles']);
  gulp.watch('./index.html').on('change', browserSync.reload);
});

// Default komanda
// Perkompiliuoti
gulp.task('default', ['wiredep-html', 'wiredep-scss', 'styles']);
