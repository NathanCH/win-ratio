'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');
var cleancss = require('gulp-clean-css');
var rename = require('gulp-rename');
var sourcemaps = require('gulp-sourcemaps');
var watch = require('gulp-watch');

gulp.task('scss', function()
{
	gulp.src('./src/scss/*.scss')
		.pipe(sass())
		.pipe(sourcemaps.init())
		.pipe(cleancss())
		.pipe(sourcemaps.write())
		.pipe(rename('style.css'))
		.pipe(gulp.dest('./public/css'))
});

gulp.task('js', function() {

});

gulp.task('watch', function() {
	gulp.watch('./src/scss/**/*', ['scss']);
	gulp.watch('./src/js/**/*', ['js']);
});

gulp.task('build', ['scss','js']);
gulp.task('default', ['scss', 'js', 'watch']);