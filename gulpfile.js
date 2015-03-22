var gulp	= require('gulp');
var sass	= require('gulp-sass');
var notify	= require('gulp-notify');
var rename	= require('gulp-rename');
var concat	= require('gulp-concat');
var util	= require('gulp-util');
var minCss	= require('gulp-minify-css');
var minJs	= require('gulp-uglify');
var include	= require('gulp-include');
var del		= require('del');
var coffee	= require('gulp-coffee');

// Aliases
gulp.task('js', ['js.rad', 'js.vendors']);
gulp.task('css', ['sass']);
gulp.task('clean', ['css.clean', 'js.clean']);

// Clean tasks
gulp.task('css.clean', function(cb){
	del(['css/*.css'], cb);
});
gulp.task('js.clean', function(cb){
	del(['js/*.js'], cb);
});

// Sass / CSS
gulp.task('sass', function () {
	return gulp.src('sass/rad.scss')
		.pipe(concat('rad.css'))
		.pipe(sass()).on('error', util.log)
		.pipe(gulp.dest('css'))
		.pipe(notify('sass compiled'))
	;
});

gulp.task('css.min', ['css.clean', 'css'], function(){
	return gulp.src('css/*.css')
		.pipe(concat('rad.min.css'))
		.pipe(minCss()).on('error', util.log)
		.pipe(gulp.dest('css'))
	;
});

// JS
gulp.task('js.rad', function(){
	return gulp.src('js/src/rad.js')
		.pipe(concat('rad.js'))
		.pipe(include()).on('error', util.log).on('warning', util.log)
		.pipe(gulp.dest('js'))
	;
});

gulp.task('js.vendors', function(){
	return gulp.src('js/src/vendors.js')
		.pipe(concat('vendors.js'))
		.pipe(include()).on('error', util.log).on('warning', util.log)
		.pipe(gulp.dest('js'))
	;
});

gulp.task('js.min', ['js.clean', 'js'], function(){
	return gulp.src('js/*.js')
		.pipe(rename({suffix: '.min'}))
		.pipe(minJs()).on('error', util.log)
		.pipe(gulp.dest('js'))
	;
});

gulp.task('watch', ['sass', 'js'], function(){
	gulp.watch(['sass/*.scss', 'sass/rad/**/*.scss'], ['sass']);
	gulp.watch(['js/src/**/*.js'], ['js']);
});

gulp.task('default', ['css.min', 'js.min']);