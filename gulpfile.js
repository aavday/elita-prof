const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const csso = require('gulp-csso');
const imagemin = import('gulp-imagemin');
const jsminify = require('gulp-minify');
const postcss = require('gulp-postcss');
const autoprefixer = require('gulp-autoprefixer');
const babel = require('gulp-babel');

function style () {
    return gulp.src('./src/scss/**/*.scss')
    .pipe(sass())
    .pipe(csso())
    .pipe(postcss([autoprefixer()]))
    .pipe(gulp.dest('./dist/css'))
}

function js () {
    return gulp.src('./src/js/**/main.js')
    .pipe(babel())
    .pipe(jsminify())
    .pipe(gulp.dest('./dist/js'))
}

function img () {
    return gulp.src('./src/img/*')
    .pipe(imagemin())
    .pipe(gulp.dest('./dist/img'))
}

function watch () {
    gulp.watch('./src/scss/**/*.scss' , style);
    gulp.watch('./src/img/*' , img);
    gulp.watch('./src/js/**/*.js' , js);
}

exports.style = style;
exports.js = js;
exports.img = img;
exports.watch = watch;