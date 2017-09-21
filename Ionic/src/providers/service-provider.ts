import { Injectable } from '@angular/core';
import { Http } from '@angular/http';
import 'rxjs/add/operator/map';

@Injectable()
export class ServiceProvider {

  serviceUrl: string = "http://localhost/estacione/";
  //http://192.168.100.173/estacione/

  constructor(public http: Http) {
  
  }

  getAll() {
    return this.http.get(this.serviceUrl + 'estacione.php').map(res => res.json());
  }

  getEstacionamento(EstacionamentoId) {debugger;
    return this.http.get(this.serviceUrl + 'getEstacionamento.php?estacionamentoId='+ EstacionamentoId).map(res => res.json());
  }

}
