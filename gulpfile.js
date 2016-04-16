var gulp = require('gulp'),
    less = require('gulp-less'),
    minifyCss = require('gulp-minify-css'),
    sourcemaps = require('gulp-sourcemaps'),
    concat = require('gulp-concat'),
    watch = require('gulp-watch');

// task for compiling less, combining css, and minifying
gulp.task('css', function () {

    // complile frontend less
    gulp.src('less/admin.less')
        .pipe(sourcemaps.init())  // Process the original sources
        .pipe(less())
        .pipe(minifyCss({compatibility: 'ie8'}))
        .pipe(sourcemaps.write()) // Add the map to modified source.
        .pipe(gulp.dest('css'));

});

// task for compiling less, combining css, and minifying
gulp.task('js', function () {

    // complile frontend js
    return gulp.src([
            // 'js/bootstrap/affix.js',
            // 'js/bootstrap/alert.js',
            // 'js/bootstrap/button.js',
            // 'js/bootstrap/carousel.js',
            'js/bootstrap/collapse.js',
            'js/bootstrap/dropdown.js',
            'js/bootstrap/modal.js',
            // 'js/bootstrap/popover.js',
            // 'js/bootstrap/scrollspy.js',
            // 'js/bootstrap/tab.js',
        ])
        .pipe(concat('bootstrap.js'))
        .pipe(gulp.dest('js'));

});



gulp.task('default', function() {
    gulp.start('css');
    gulp.start('js');
});

gulp.task('watch', function () {
    watch(['less/**/*.less'], function (event) {
        gulp.start('css');
        gulp.start('js');
    });
});
