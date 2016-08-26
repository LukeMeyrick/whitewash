var gulp = require('gulp'),
    sass = require('gulp-sass'),
  minifycss = require('gulp-minify-css'),
	// livereload = require('gulp-livereload');
    uglify = require('gulp-uglify'),
    concat = require('gulp-concat');
    prefix = require('gulp-autoprefixer');


// Compile Our Sass
gulp.task('sass', function() {
    return gulp.src('*.scss')
        .pipe(sass())
		    .pipe(minifycss())
        .pipe(prefix('last 2 versions'))
        .pipe(gulp.dest(''));
});


//do the scripts
gulp.task('scripts', function() {
  return gulp.src('_/js/*.js')
    .pipe(concat('main.js'))
    .pipe(gulp.dest('_/js/minified'))
    .pipe(uglify())
    .pipe(gulp.dest('_/js/minified'));
});

// Watch Files For Changes
gulp.task('watch', function() {
    gulp.watch('_/js/*.js', ['scripts']),
    gulp.watch('*.scss', ['sass']);

	// var server = livereload();
	//  	gulp.watch(['*']).on('change', function(file) {
	// 	server.changed(file.path);
	// });

});




// Default Task
gulp.task('default', ['sass','scripts','watch']);
