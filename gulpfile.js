import gulp from 'gulp';
import dartSass from 'sass';
import gulpSass from 'gulp-sass';
import csso from 'gulp-csso';
import imagemin  from 'gulp-imagemin';
import jsminify from 'gulp-minify';
import autoprefixer from 'gulp-autoprefixer';
import babel from 'gulp-babel';

const sass = gulpSass(dartSass);

gulp.task('style', () => {
    return gulp.src('./src/scss/**/*.scss')
        .pipe(sass.sync().on('error', sass.logError))
        .pipe(csso())
        .pipe(autoprefixer())
        .pipe(gulp.dest('./dist/css'))
})

gulp.task('js', () => {
    return gulp.src('./src/js/**/*.js')
        .pipe(babel())
        .pipe(jsminify())
        .pipe(gulp.dest('./dist/js'))
})

gulp.task('img', () => {
    return gulp.src('./src/img/*')
        .pipe(imagemin())
        .pipe(gulp.dest('./dist/img'));
})

gulp.task('watch', () => {
    gulp.watch('./src/scss/**/*.scss' , gulp.series('style'));
    gulp.watch('./src/img/*' , gulp.series('img'));
    gulp.watch('./src/js/**/*.js' , gulp.series('js'));
})