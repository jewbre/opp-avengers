<?php
/**
 * Created by PhpStorm.
 * User: Vilim Stubičan
 * Date: 12.10.2014.
 * Time: 18:05
 */

class Header {
    function displayHeader() {
        ?>
        <div class="header"  ng-controller="headerController">
            <div id="slider">
                <img  ng-repeat="img in images" class="sliderImage" ng-src="{{img}}" />
            </div>

            <div class="menu">
                <div class="menuItem">
                    Menu Item 1
                </div>
                <div class="menuItem">
                    Menu Item 2
                </div>
                <div class="menuItem">
                    Menu Item 3
                </div>
                <div class="menuItem">
                    Menu Item 4
                </div>

            </div>

        </div>

    <?php
    }
} 