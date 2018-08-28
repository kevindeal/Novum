var gulp = require('gulp');
var sass = require('gulp-sass');

//task
gulp.task('styles', function(){
    gulp.src('c/sass/**/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('./c/'));
});

//watch task
gulp.task('default', function() {
    gulp.watch('c/sass/**/*.scss',['styles']);
});