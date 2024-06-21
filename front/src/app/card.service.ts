import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';
import { environment } from '../environments/environment';

export interface Card {
  color: string;
  value: string;
}

@Injectable({
  providedIn: 'root'
})
export class CardService {
  private apiUrl = environment.apiUrl;

  constructor(private http: HttpClient) { }

  getCards(): Observable<Card[]> {
    return this.http.get<Card[]>(`${this.apiUrl}/cards`);
  }

  sortCards(cards: Card[]): Observable<Card[]> {
    return this.http.post<Card[]>(`${this.apiUrl}/cards/sort`, cards);
  }
}
