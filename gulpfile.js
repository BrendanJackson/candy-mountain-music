/*
|------------------------------------------
| Gulp
|------------------------------------------
| Most important methods of gulp object are:
|
| src: Where we put the name of the file we want to work with and use as an input.
| pipe: Will take output of the previous command as pipe it as an input for the next.
| dest: Writes the output of previous commands to the folder we specify.
|
|
*/

var
  gulp =                   require('gulp'),
  gutil =                  require('gulp-util'),
  sass =                   require('gulp-sass'),
  uglify =                 require('gulp-uglify'),
  concat =                 require('gulp-concat'),
  connect =                require('gulp-connect')
  autoprefixer =           require('gulp-autoprefixer'),
  cleanCss =              require('gulp-clean-css'),
  rename =                 require('gulp-rename')
;

// Gets all children in assets with a scss file extension
var SCSS_SRC = ['./src/assets/scss/*.scss'];
var BS_SRC = ['./src/assets/bootstrap*/*.scss'];

/**
* Task descriptions
*/
gulp.task('copy', function(){
  gulp.src('full.php')
  .pipe( gulp.dest('assets') )
});

// Builds and minifies all scss files into the dist folder
gulp.task('scss', function(){

  gulp.src(SCSS_SRC)
    .pipe( sass().on( 'error', sass.logError))
    .pipe( cleanCss() )
    .pipe( concat( 'style.css' ) )
    .pipe( rename({
      basename : 'style',
      extname : '.min.css'
    }))
    .pipe( gulp.dest( 'dest/css' ) );

});


gulp.task('min', function () {
    gulp.src('src/**/*.css')
        .pipe(cssmin())
        .pipe(rename({suffix: '.min'}))
        .pipe(gulp.dest('dist'));
});

/**
* Log
*/
gulp.task('log', function(){
  gutil.log('== My Log Task ==')
});

/**
* Reload page
*/
gulp.task('connect', function(){
  connect.server({
    root: '.',
    livereload: true
  })
});

gulp.task('build', [])
