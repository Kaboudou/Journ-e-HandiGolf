var myApp = angular.module('MyDataService', []);

myApp.service('DataService', function ($http) {
   
    this.getData = function (callback) {
        // method 1
        /*$http.get('data/Question.json')*/
        $http({
            method: "get",
            url: "data/Question.json",
            params: {
                contentType: "application/json; charset=utf-8",
                dataType: "json"
            }
        }).success(callback)
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
    $scope.randomSort = function () {
        return Math.random()  ;
    };
    $scope.removeFirst = function () {
        $scope.questions.shift();
        
    };
    $scope.points = 0;
    $scope.call = 0;
    $scope.Class = null;
    $scope.selectreponse = function (Reponse, Answers, Explication) {
        var reponse = angular.equals(Reponse, Answers);
        console.log(reponse);
        
        if (reponse === true) {
            $scope.result = "Bonne Réponse";
            $scope.Class = "vrai" ; 
            $scope.points = $scope.points + 1;
            $scope.call = $scope.call + 1;
            $scope.Class = 'vrai';
           
            
            if ($scope.call === 10) {
                $scope.result = "Mauvaise Réponse";
                alert('Quiz fini !' + "Votre Score est de " + $scope.points)
                console.log("Quiz fini !");
                console.log("Votre Score est de " + $scope.points)
                setTimeout("document.location.href = 'commencer.html';", 5000);
            }
        }
        else {
            $scope.result = "Mauvaise Réponse";
            $scope.call = $scope.call + 1;
            $scope.Class = 'faux';
            if ($scope.call === 10) {
                alert('Quiz fini !' + "Votre Score est de " + $scope.points )
                console.log("Quiz fini !");
                console.log("Votre Score est de " + $scope.points)
                setTimeout("document.location.href = 'commencer.html';", 5000);
            }
        }
        
        
        console.log($scope.points);
        console.log($scope.call);
    };
    
    
});
