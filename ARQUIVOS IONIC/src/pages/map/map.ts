import { Component, ElementRef, ViewChild } from '@angular/core';
import { IonicPage, NavController, LoadingController } from 'ionic-angular';
import { ServiceProvider } from "../../providers/service-provider";
import { Estacionamento } from './../estacionamento/estacionamento';
import { Geolocation } from '@ionic-native/geolocation';

declare var google;

@IonicPage()
@Component({
  selector: 'page-map',
  templateUrl: 'map.html',
})
export class Map {

  estacionamentos = [];

  @ViewChild('map') mapElement: ElementRef;
  map: any;

  constructor(public geolocation: Geolocation,public navCtrl: NavController, public service: ServiceProvider, public loading: LoadingController) {
    
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
          this.markerEstacionamentos();
        });
        loader.dismiss();
      });
    });
  }

  ionViewDidLoad() {
    this.loadMap();
  }

  loadMap(){

    let latLng = new google.maps.LatLng(-7.160351, -34.854359);
 
    let mapOptions = {
      center: latLng,
      zoom: 15,
      mapTypeId: google.maps.MapTypeId.ROADMAP,
      fullscreenControl : false,
      streetViewControl : false,
      mapTypeControl :  false
    }
 
    this.map = new google.maps.Map(this.mapElement.nativeElement, mapOptions);


  }

  markerEstacionamentos() {
    
    this.estacionamentos.forEach(item => {
      
      let currentPosition = new google.maps.LatLng(item.Ltd, item.Lng);

      let marker = new google.maps.Marker({
        map: this.map,
        title: item.Nome,
        animation: google.maps.Animation.DROP,
        position: currentPosition,
        infEst: item,
        icon: { url : 'assets/img/greenMark.png' }
      });   

      this.addInfoWindow(marker);

    })

  }

   addInfoWindow(marker){
  
    google.maps.event.addListener(marker, 'click', () => {
      this.navCtrl.push(Estacionamento, marker.infEst);
    });
  
  }

  myLocation(){
    let loading = this.loading.create({
      content: 'Carregando...'
    });

    this.geolocation.getCurrentPosition().then((position) => {
 
      let latLng = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
 
      let mapOptions = {
        center: latLng,
        zoom: 15,
        mapTypeId: google.maps.MapTypeId.ROADMAP
      }
 
      this.map = new google.maps.Map(this.mapElement.nativeElement, mapOptions);
 
    }, (err) => {
      console.log(err);
    });

    loading.present();

    setTimeout(() => {
      loading.dismiss();
    }, 5000);

  }

}
