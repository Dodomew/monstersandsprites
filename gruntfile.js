module.exports = function(grunt){
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		sass: {
			compileAndCopy: {
				options: {
					style: 'expanded'
				},
				files: {
					'TangerineZebra/style.css' : 'scss/style.scss'					
				}
			}
		},
          
        sync: {
            theme: {
                files: [
                    { cwd: 'TangerineZebra/', src: ['**/*.js', '**/*.css', '**/*.php'], dest: 'C:/wamp64/www/monstersandsprites-local/wp-content/themes/TangerineZebra'} // makes all src relative to cwd 
                ],
                verbose: true, // Default: false 
                failOnError: true, // Fail the task when copying is not possible. Default: false 
                updateAndDelete: true // Remove all files from dest that are not found in src. Default: false 
            },
            live: {
                files: [
                    { cwd: 'TangerineZebra/', src: ['**/*.js', '**/*.css', '**/*.php'], dest: 'output'} // makes all src relative to cwd 
                ],
                verbose: true, // Default: false 
                failOnError: true, // Fail the task when copying is not possible. Default: false 
                updateAndDelete: true // Remove all files from dest that are not found in src. Default: false 
             }
            },
        
        htmlmin: {                                         // Task
            dist: {                                      // Target
                  options: {                                 // Target options
                  removeComments: true,
                  collapseWhitespace: true
                  },
                  files: {                                   // Dictionary of files
                    'dist/index.html': '**/*.html'           // 'destination': 'source'
                      }
                    },
                    /*dev: {                                       // Another target
                      files: {
                        'dist/index.html': 'src/index.html',
                        'dist/contact.html': 'src/contact.html'
                      }
                    }*/
                  },
        
        cssmin: {
            minify: {
                options: {
                    shorthandCompacting: false,
                    roundingPrecision: -1
                    }
            },
            target: {
                files: {
                  'C:/wamp64/www/monstersandsprites-local/wp-content/themes/TangerineZebra/style.css': ['css/style.css']
                }
              }
            },
                              
        uglify: {   //uglify is alleen voor js files
            my_target: {
                files: [
                    { expand: true, mangle: false, cwd: 'TangerineZebra/', 
                    src: ['**/*.js'], 
                    dest: 'C:/wamp64/www/monstersandsprites-local/wp-content/themes/TangerineZebra/js/'}
                    ]
                }
            },
        
        uncss: {
          dist: {
            files: {
              'cleanCss/style.css': ['css/style.css']
            }
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
    grunt.loadNpmTasks('grunt-contrib-htmlmin');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-uncss');
    
	grunt.registerTask('default', ['watch']);
    grunt.registerTask('minify', ['cssmin']);
	//grunt.registerTask('release',['sass', 'sync:live', 'minify', 'upload']);    
}