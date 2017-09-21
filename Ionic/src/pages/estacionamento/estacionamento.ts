import { Component } from '@angular/core';
import { IonicPage, NavController, NavParams, LoadingController } from 'ionic-angular';
import { ServiceProvider } from "../../providers/service-provider";

@IonicPage()
@Component({
  selector: 'page-estacionamento',
  templateUrl: 'estacionamento.html',
})
export class Estacionamento {
  estacionamento: any;

  constructor(public navCtrl: NavController, public navParams: NavParams, public service: ServiceProvider, public loading: LoadingController) {
    this.estacionamento = this.navParams.data;
    this.estacionamento.Endereco = {};
  }

  ionViewDidLoad() {
    this.getEstacionamento(this.estacionamento.EstacionamentoId);
  }

  getEstacionamento(EstacionamentoId) {
    let loader = this.loading.create({
      content: 'Carregando...',
    });

    loader.present().then(() => {
      return new Promise(resolve => {
        this.service.getEstacionamento(EstacionamentoId).subscribe(data => {
          this.estacionamento.Endereco = data[0];
          resolve(this.estacionamento.endereco);
          console.log(this.estacionamento);
        });
        loader.dismiss();
      });
    });
  }

}
