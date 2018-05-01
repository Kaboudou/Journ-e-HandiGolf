var myApp = angular.module('MyDataService', []);
myApp.service('DataService', function ($http) {
    this.getData = function (callback) {
        // method 1
        $http.get('data/manifest.json').success(callback)
            .error(function (callback) {
                alert("No data");
                callback(undefined);
            });
    };
});

myApp.controller('Question', function ($scope, DataService) {
    $scope.questions = null;
    $scope.getAllQuestion = function () {
        DataService.getData(function (data) {
            $scope.questions = data;
        });
        
    };
    $scope.randomQues = function () {
        Math.random()
    };
    $scope.removeFirst = function () {
        $scope.questions.shift();
    };
    $scope.points = 0;
    $scope.call = 0;
    $scope.selectreponse = function (Reponse, Answers) {
        var reponse = angular.equals(Reponse, Answers);
        console.log(reponse);
        
        if (reponse === true) {
            $scope.result = "Bonne Réponse";
            alert('Bonne Réponse');
            $scope.points = $scope.points + 1;
            $scope.call = $scope.call + 1;
            
            if ($scope.call === 10) {
                console.log("Quiz fini !");
            }
        }
        else {
            $scope.result = "Mauvaise Réponse";
            alert('Mauvaise Réponse');
            
            $scope.call = $scope.call + 1;
            if ($scope.call === 10) {
                console.log("Quiz fini !");
            }
        }
        
        
        console.log($scope.points);
    };
    
    
});
