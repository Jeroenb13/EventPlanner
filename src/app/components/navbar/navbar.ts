import { Component } from '@angular/core';

@Component({
    selector: 'navbar',
    templateUrl: './navbar.html',
    styleUrls: ['./style.css'],
})
export class NavBarComponent {
    links = [
        {text:'Home', url:'/'},
        {text:'Login', url:'/login'},
        {text: 'Locatie', url: '/locatie'},
    ];
}
