(function() {
    app.controller('RecommendationListingCtrl', function($scope, CoResource,
        $routeParams, $rootScope, $mdDialog, $mdToast, $location, $timeout) {
        var timer = null;
        $scope.data = { created_at_from: null, created_at_to: null }
        // Pagination
        $scope.pagination = {
            limit: 10,
            offset: $location.search().offset || 1,
            current: 1
        };
        $scope.search = {
            query: $location.search().search || ''
        };
        $scope.view = function(directory) {
            $location.path('hotel/' + directory._id);
        };
        
        $scope.createShop = function(directory) {
            $location.path('hotels/create');
        };

        $scope.dateChange = function(type) {
            if (type == 'created_at_from') {
                $scope.search.created_at_from = $scope.data.created_at_from;
            } else {
                $scope.search.created_at_to = $scope.data.created_at_to;
            }

            startCalling();
        }

        function loadData(callback, offset, limit) {
            offset = offset || $scope.pagination.offset;
            limit = limit || 10;

            $scope.directories = CoResource.resources.Recommendation.list({
                'offset': (offset - 1) * limit || 0,
                'limit': limit || 10,
                // 'ignore-offset': 0,
                'search': $scope.search.query || '',
                // 'filters': $scope.search.filter || '',
                'created_at_from': getDate($scope.data.created_at_from),
                'created_at_to': getDate($scope.data.created_at_to),
                // 'sorts': '-created_at,directory_name', // $scope.sort || '',
            }, function(s) {
                $scope.directories = s.result;
                 $scope.pagination.total_record = s.options.total;

                console.log($scope.directories);

                $scope.preparePagination();
                setTimeout(function() {
                    renderMagnific();
                }, 2000);

                if (callback) {
                    callback();
                }
            });
        }

        loadData();

        $scope.preparePagination = function() {
            var amount = $scope.pagination.total_record > $scope.pagination.limit ? Math.ceil($scope.pagination.total_record / $scope.pagination.limit) : 0;
            console.log("amount", amount);
            $scope.pagination.total = amount;
        };
        $scope.changePage = function(current) {
            $scope.pagination.current = current;
        };
        $scope.changeOffset = function(offset) {
            $scope.pagination.offset = offset;
        };
            $scope.onPageChanged = function() {
            $location.search('offset', $scope.pagination.offset);
            //      $rootScope.loading('show');
            // loadData(function (){
            //  $rootScope.loading('hide');
            // }, $scope.pagination.offset, 10);
        };

        $scope.$watch('search.query', function(v, old) {
            if (v == old) {
                return;
            }
           // console.log(v);
            $location.search('search', v);
        });

        var watchers = {};
        watchers['search'] = $scope.$watch(function() {
            return $location.search().search;
        }, function(v, old) {

            if (v == old) {
                return;
            }

            $scope.search.query = v;
            startCalling();
        });

        $scope.$on('$destroy', function() {
            for (var key in watchers) {
                watchers[key]();
            }
            // $location.search('offset', null);
            // $location.search('search', null);
        });

function getDate(date) {
            if (date) {
                return date;
            } else {
                return '';
            }


        }

        function startCalling() {
            if (timer) {
                $timeout.cancel(timer);
            }
            timer = $timeout(function() {

                $rootScope.loading('show');

                loadData(function() {
                    $rootScope.loading('hide');
                });
            }, 700);

        }

         function renderMagnific() {
            $('.mini-gallery-list').magnificPopup({
                type: 'image',
                removalDelay: 300,
                mainClass: 'mfp-with-zoom',
                delegate: 'li.gallery-item', // the selector for gallery item,
                titleSrc: 'title',
                tLoading: '',
                gallery: {
                    enabled: true
                },
                callbacks: {
                    imageLoadComplete: function() {
                        var self = this;
                        setTimeout(function() {
                            self.wrap.addClass('mfp-image-loaded');
                        }, 16);
                    },
                    open: function() {
                        // $('#header > nav').css('padding-right', getScrollBarWidth() + "px");
                    },
                    close: function() {
                        this.wrap.removeClass('mfp-image-loaded');
                        // $('#header > nav').css('padding-right', "0px");
                    },
                }
            });
        }


    }); 
}());