// src/app/app.component.ts
import { Component, OnInit } from '@angular/core';
import { Card, CardService } from './card.service';
import { HttpClientModule} from "@angular/common/http";
import { CommonModule } from '@angular/common';

@Component({
  selector: 'app-root',
  standalone: true,
  imports: [HttpClientModule, CommonModule],
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.scss']
})

export class AppComponent implements OnInit {
  hand: Card[] = [];
  sortedHand: Card[] = [];

  constructor(private cardService: CardService) {}

  ngOnInit(): void {
    this.cardService.getCards().subscribe(cards => {
      this.hand = cards;
    });
  }

  sortCards(): void {
    this.cardService.sortCards(this.hand).subscribe(sortedCards => {
      this.sortedHand = sortedCards;
    });
  }
}
