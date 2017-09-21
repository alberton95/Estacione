import { Component, ViewChild, ElementRef } from '@angular/core';
import { IonicPage, NavController, NavParams, LoadingController } from 'ionic-angular';
import { ServiceProvider } from "../../providers/service-provider";
import { Geolocation } from '@ionic-native/geolocation';

declare var google;

@IonicPage()
@Component({
  selector: 'page-list',
  templateUrl: 'list.html',
})
export class List {

  @ViewChild('map') mapElement: ElementRef;
  map: any;
  estacionamentos = [];

  constructor(public navCtrl: NavController, public navParams: NavParams, public geolocation: Geolocation, public service: ServiceProvider, public loading: LoadingController) {
  
  }

  ionViewWillEnter() {
    this.getEstacionamentos();
  }

  getEstacionamentos() {
    let loader = this.loading.create({
      content: 'Carregando...',
    });

    loader.present().then(() => {
      return new Promise(resolve => {
        this.service.getAll().subscribe(data => {
          this.estacionamentos = data;
          resolve(this.estacionamentos);
        });
        loader.dismiss();
      });
    });
  }

  
}
