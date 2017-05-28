var elixir = require('laravel-elixir');
require('laravel-elixir-browser-sync-simple');
var gulp = require('gulp');
var sass = require('gulp-sass');
var less = require('gulp-less');
var path = require('path');
var rename = require('gulp-rename');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass([
        'app.scss',
    ], 'public/assets/css')
    // .browserSync({
    //   proxy: 'dibandeja.local',
    // })
    .less([
        '../bootstrap/bootstrap.less'
    ], 'public/assets/admin/css/bootstrap.css')

    .less([
        '../admin/AdminLTE.less'
    ], 'public/assets/admin/css')
    .less([
        '../admin/skins/skin-blue.less'
    ], 'public/assets/admin/css/skins/skin-blue.css')
    .copy('resources/assets/admin/fonts', 'public/assets/admin/fonts')
    .copy('resources/assets/admin/js', 'public/assets/admin/js')
    .copy('resources/assets/admin/plugins', 'public/assets/admin/plugins')
    
    .copy('resources/assets/images', 'public/assets/images')
    .copy('resources/assets/js/vendor', 'public/assets/js/vendor')
    .copy('resources/assets/font', 'public/assets/css/font')
    .copy('resources/assets/images', 'public/assets/images')
    .copy('resources/assets/js/', 'public/assets/js/')
    .scripts(['main.js'], 'public/assets/js/main.js');
});

gulp.task('lessStyles', function() {
    gulp.src(['./resources/assets/bootstrap/bootstrap.less'])
        .pipe(less())
        .pipe(gulp.dest('public/assets/admin/css'));

    return gulp.src('./resources/assets/admin/AdminLTE.less')
        .pipe(less())
        .pipe(rename('app.css'))
        .pipe(gulp.dest('./public/assets/admin/css'));

    gulp.src(['./resources/assets/admin/skins/skin-blue.less'])
        .pipe(less())
        .pipe(gulp.dest('./public/assets/admin/css/skins'));
});

gulp.task('styles', function() {
    gulp.src(['resources/assets/sass/**/*'])
    .pipe(sass())
    .pipe(gulp.dest('public/assets/css'));
});

gulp.task('scripts', function() {
    gulp.src(['resources/assets/js/**/*'])
        .pipe(gulp.dest('public/assets/js'));;

    gulp.src(['resources/assets/admin/js/**/*'])
        .pipe(gulp.dest('public/assets/admin/js'));;
});

gulp.task('images', function (){
    gulp.src(['resources/assets/images/**/*'])
    .pipe(gulp.dest('public/assets/images'));
});

gulp.task('watch', function() {
    gulp.watch('resources/assets/js/**/*.js', ['scripts']);
    gulp.watch('resources/assets/admin/js/**/*', ['scripts']);
    gulp.watch('resources/assets/sass/**/*.scss', ['styles']);
    gulp.watch('resources/assets/admin/**/*.less', ['lessStyles']);
    gulp.watch('resources/assets/images/**/*', ['images']);
});
