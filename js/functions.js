 /**
 * Theme functions
 * Initialize all scripts and adds custom js
 *
 * @since 1.0.0
 *
 */

( function( $ ) {

    'use strict';

    var wpexFunctions = {

        /**
         * Define cache var
         *
         * @since 1.0.0
         */
        cache: {},

        /**
         * Main Function
         *
         * @since 1.0.0
         */
        init: function() {
            this.cacheElements();
            this.bindEvents();
        },

        /**
         * Cache Elements
         *
         * @since 1.0.0
         */
        cacheElements: function() {
            this.cache = {
                $window   : $( window ),
                $document : $( document )
            };
        },

        /**
         * Bind Events
         *
         * @since 1.0.0
         */
        bindEvents: function() {

            // Get sef
            var self = this;

            // Run on document ready
            self.cache.$document.on( 'ready', function() {
               self.exampleFunction(); // run sample function
            } );

            // Run on Window Load
            self.cache.$window.on( 'load', function() {
                self.exampleFunction(); // run sample function
            } );

        },

        /**
         * Example function doesn't do anything...
         *
         * @since 1.0.0
         */
        exampleFunction: function() {
            return;
        },

    }; // END wpexFunctions

    // Get things starter
    wpexFunctions.init();

} ) ( jQuery );