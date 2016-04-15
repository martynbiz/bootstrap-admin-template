var gulp = require('gulp'),
    less = require('gulp-less'),
    // minifyCss = require('gulp-minify-css'),
    sourcemaps = require('gulp-sourcemaps'),
    watch = require('gulp-watch');

// task for compiling less, combining css, and minifying
gulp.task('css', function () {

    // complile frontend less
    gulp.src('less/admin.less')
        .pipe(sourcemaps.init())  // Process the original sources
        .pipe(less())
        .pipe(sourcemaps.write()) // Add the map to modified source.
        .pipe(gulp.dest('css'));

});

gulp.task('default', function() {
    gulp.start('css');
});

gulp.task('watch', function () {
    watch(['less/**/*.less'], function (event) {
        gulp.start('css');
    });
});
