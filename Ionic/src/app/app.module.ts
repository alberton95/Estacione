import { BrowserModule } from '@angular/platform-browser';
import { ErrorHandler, NgModule } from '@angular/core';
import { IonicApp, IonicErrorHandler, IonicModule } from 'ionic-angular';
import { SplashScreen } from '@ionic-native/splash-screen';
import { StatusBar } from '@ionic-native/status-bar';

import { MyApp } from './app.component';
import { HomePage } from '../pages/home/home';

import { ServiceProvider } from './../providers/service-provider';
import { HttpModule } from "@angular/http";
import { Geolocation } from '@ionic-native/geolocation';

import { Map } from '../pages/map/map';
import { List } from '../pages/list/list';
import { Estacionamento } from './../pages/estacionamento/estacionamento';

@NgModule({
  declarations: [
    MyApp,
    HomePage,
    Map,
    List,
    Estacionamento
  ],
  imports: [
    BrowserModule,
    IonicModule.forRoot(MyApp),
    HttpModule
  ],
  bootstrap: [IonicApp],
  entryComponents: [
    MyApp,
    HomePage,
    Map,
    List,
    Estacionamento
  ],
  providers: [
    StatusBar,
    SplashScreen,
    ServiceProvider,
    Geolocation,
    {provide: ErrorHandler, useClass: IonicErrorHandler}
  ]
})
export class AppModule {}
