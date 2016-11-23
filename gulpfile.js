var gulp = require('gulp'),
	browserSync = require('browser-sync').create(),
	connect = require('gulp-connect-php'),
	imagemin = require('gulp-imagemin'),
	clean = require('gulp-clean'),
	concat = require('gulp-concat'),
	htmlReplace = require('gulp-html-replace'),
	uglify = require('gulp-uglify'),
	usemin = require('gulp-usemin'),
	cssmin = require('gulp-cssmin'),
	jshint = require('gulp-jshint'),
	jshintStylish = require('jshint-stylish'),
	csslint = require('gulp-csslint'),
	autoprefixer = require('gulp-autoprefixer');



gulp.task('default', ['copy'], function(){

	gulp.start('build-img', 'usemin');

});

gulp.task('server', function() {
	browserSync.init({
		proxy: '127.0.0.1/LCS-Empreendimentos/'
	});
	gulp.watch('./*.php').on('change', browserSync.reload);
	gulp.watch('./admin/*.php').on('change', browserSync.reload);
	gulp.watch('css/*.css').on('change', function(event){
		gulp.src(event.path)
			.pipe(csslint())	
			.pipe(csslint.reporter());
	});
	gulp.watch('js/*.js').on('change', function(event){
		gulp.src(event.path)
			.pipe(jshint())
			.pipe(jshint.reporter(jshintStylish));
	});

});

// faz uma cópia de todos os arquivos da raiz pra pasta dist
// ao executar a tarefa copy, como dependência ele roda a dependência (celan)
//fluxo -> Executa o clean e depois o copy
gulp.task('copy', ['clean'], function(){
	return gulp.src('./**/*')
	.pipe(gulp.dest('./dist'));
});

gulp.task('clean', function(){
	return gulp.src('./dist') // da a garantia que só o clean vai rodar pra depois sinalizar pro copy um ok e vai ser executado
	.pipe(clean()); //clean se encarrega de apagar a pasta dist 
});

gulp.task('build-img', function(){
	gulp.src('dist/img/*') /* ** = todos os diretórios e * todos arquivos de todos os dir */
		.pipe(imagemin())
		.pipe(gulp.dest('dist/img/*'));
});


gulp.task('build-css', function(){
	gulp.src('dist/css/*.css')
		.pipe(concat('all.css'))
		.pipe(gulp.dest('dist/css'));
});


gulp.task('usemin', function(){
	gulp.src('dist/**/*.php')
		.pipe(usemin({
			'js' : [uglify], //todos que tem build:js no comentário, ele usa todos os plugins necessários
			'css' : [cssmin]
		}))
		.pipe(gulp.dest('dist'))
});

/*gulp.task('build-php', function(){
	gulp.src('dist/*.php')
		.pipe(htmlReplace({
			js: 'js/all.js',
			css: 'css/all.css'
		}))
		.pipe(gulp.dest('./dist'));
});

gulp.task('build-js', function(){
	//fluxo de origem -- LEITURA
	gulp.src(['dist/js/jquery-1.9.1.min.js', 'dist/js/bootstrap.min.js', 'dist/js/owl.carousel.js', 'dist/js/custom.js', 'dist/js/jquery.parallax.js'])
		//processa todos arquivos -- PROCESSAMENTO
	    .pipe(concat('all.js'))
	    .pipe(uglify())
		//fluxo de escrita -- UNICA GRAVAÇÃO EM DISCO
	    .pipe(gulp.dest('dist/js'));
});*/
