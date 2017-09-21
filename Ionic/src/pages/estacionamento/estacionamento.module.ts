import { NgModule } from '@angular/core';
import { IonicPageModule } from 'ionic-angular';
import { Estacionamento } from './estacionamento';

@NgModule({
  declarations: [
    Estacionamento,
  ],
  imports: [
    IonicPageModule.forChild(Estacionamento),
  ],
  exports: [
    Estacionamento
  ]
})
export class EstacionamentoModule {}
