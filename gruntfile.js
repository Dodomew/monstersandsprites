module.exports = function(grunt) {
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		sass: {
			dist: {
				files: {
					'style/style.css' : 'css/style.css', 'C:/wamp64/www/monstersandsprites-local/wp-content/themes/TangerineZebra/style.css' : 'css/style.css'
				}
			}
		},
		watch: {
			css: {
				files: 'scss/style.scss',
				tasks: ['sass']
			}
		}
	});
	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.registerTask('default',['watch']);
}