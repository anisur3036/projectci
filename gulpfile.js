var gulp = require('gulp');
var sass = require('gulp-sass');
var postcss = require('gulp-postcss');
var babel = require('gulp-babel');
var minifyjs = require('gulp-js-minify');
var webserver = require('gulp-webserver');
var sourcemaps = require('gulp-sourcemaps');


//`gulp js` command for js files to compile
gulp.task('js', function () {
  return gulp.src("src/**/*.js")
    .pipe(sourcemaps.init())
    .pipe(babel())
    //.pipe(minifyjs())
    .pipe(sourcemaps.write())
    .pipe(gulp.dest("../public/js/"));
});


//`gulp style` command for scss file to compile
gulp.task('style', function () {
    var tailwindcss = require('tailwindcss');

    return gulp.src('src/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(postcss([
            tailwindcss('./tailwind.js'),
            require('autoprefixer'),
        ]))
        .pipe(gulp.dest('../pubic/css/'));
});

//watch command for `js` and `style`
gulp.task('watch', function() {
  gulp.watch('src/**/*.js', ['js']);
  gulp.watch('src/**/*.scss', ['style']);
});

//live reload webserver 
//make sure will have included index file
// within dist/build(whatever you call) directory
gulp.task('webserver', function() {
    gulp.src('../public/')
        .pipe(webserver({
            livereload: true,
            port: 8012,
            open: true
        }));
});
//default action of `gulp` command
gulp.task('default', ['watch', 'webserver']);
