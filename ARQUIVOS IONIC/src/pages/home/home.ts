import { Component } from '@angular/core';

import { Map } from '../map/map';
import { List } from '../list/list';

@Component({
  selector: 'page-home',
  templateUrl: 'home.html'
})
export class HomePage {

  mapRoot: any = Map;
  listRoot: any = List;

  constructor() {
    
  }

}
