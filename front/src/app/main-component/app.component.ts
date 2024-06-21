// src/app/app.component.ts
import { Component, OnInit } from '@angular/core';
import { CommonModule } from '@angular/common';
import {CardComponent} from "../features/card-game/components/card/card.component";

@Component({
  selector: 'app-root',
  standalone: true,
  imports: [CommonModule, CardComponent],
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.scss']
})

export class AppComponent implements OnInit {
  constructor() {}

  ngOnInit(): void {
  }
}
