module.exports = function(grunt) {
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		sass: {
			compileAndCopy: {
				files: {
					'TangerineZebra/style.css' : 'css/style.css'//, 'C:/wamp64/www/monstersandsprites-local/wp-content/themes/TangerineZebra/style.css' : 'css/style.css'
				}
			}
		},
          
        sync: {
            theme: {               
                files: [
                    { cwd: 'TangerineZebra/', src: ['**/*.js', '**/*.css', '**/*.php'], dest: 'C:/wamp64/www/monstersandsprites/wp-content/themes/TangerineZebra'} // makes all src relative to cwd 
                ],
                verbose: true, // Default: false 
                failOnError: true, // Fail the task when copying is not possible. Default: false 
                updateAndDelete: true, // Remove all files from dest that are not found in src. Default: false 
            },
            live: {               
                files: [
                    { cwd: 'TangerineZebra/', src: ['**/*.js', '**/*.css', '**/*.php'], dest: 'output'} // makes all src relative to cwd 
                ],
                verbose: true, // Default: false 
                failOnError: true, // Fail the task when copying is not possible. Default: false 
                updateAndDelete: true, // Remove all files from dest that are not found in src. Default: false 
             }
         },
        
		watch: {
			css: {
				files: 'scss/style.scss',
				tasks: ['sass']
			},
            php: {                
                files: 'TangerineZebra/**/*.*',
                tasks: ['sync:theme']  //Specifically run the 'main' subtask
            }
            		
        }        
        
      
	});
    
    grunt.loadNpmTasks('grunt-sync');
	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-contrib-watch');
    
	grunt.registerTask('default',['watch']);   
	//grunt.registerTask('release',['sass', 'sync:live', 'minify', 'upload']);    
}