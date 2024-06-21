// src/app/app.component.ts
import { Component, OnInit } from '@angular/core';
import { CardService } from '../../services/card.service';
import { CommonModule } from '@angular/common';
import Card from '../../models/card.interface';

@Component({
  selector: 'card',
  standalone: true,
  imports: [CommonModule],
  templateUrl: './card.component.html',
  styleUrls: ['./card.component.scss']
})

export class CardComponent implements OnInit {
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
