import { Injectable } from '@angular/core';
import { BehaviorSubject, Observable } from 'rxjs';
import { HttpClient } from  '@angular/common/http';

@Injectable({
  providedIn: 'root'
})
export class GetDataService {
    themes = new BehaviorSubject([]);
    
  constructor(private http: HttpClient) {}
    
    getThemes() {
        this.http
            .get("http://localhost/api/themelist")
            .subscribe((res: any[]) => {
                console.log(res);
                this.themes.next(res);
                console.log(this.themes);
        })
    }
    
    addTheme(theme) {
        console.log(theme);
        this.http.post("http://localhost/api/create", theme).subscribe(data => {
            console.log(data);
            this.getThemes();
        });
    }
    
    updTheme(theme) {
        this.http.put("http://localhost/api/update", theme).subscribe(data => {
            console.log(data);
            this.getThemes();
        });
    }
}
