var gulp	= require('gulp');
var sass	= require('gulp-sass');
var watch	= require('gulp-watch');
var notify	= require('gulp-notify');
var rename	= require('gulp-rename');
var concat	= require('gulp-concat');
var util	= require('gulp-util');
var minCss	= require('gulp-minify-css');

gulp.task('sass', function () {
	gulp.src('./sass/rad.scss')
		.pipe(concat('rad.css'))
		.pipe(sass()).on('error', util.log)
		.pipe(gulp.dest('./css'))
		.pipe(notify('sass compiled'))
	;
});

gulp.task('css.min', ['sass'], function(){
	gulp.src('./css/*.css')
		.pipe(rename({suffix: '.min'}))
		.pipe(minCss()).on('error', util.log)
		.pipe(gulp.dest('./css'))
	;
});


gulp.task('watch', ['sass'], function(){
	gulp.watch(['./sass/*.scss', './sass/rad/**/*.scss'], ['sass']);
});