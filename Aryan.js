        function po(n) {
            let i = 1;
            for (let k = 0; k < n; k++) {
                i = i * 2;
            }
            return i;
        }
        
        function ab(c) {
            if (c >= 0) {
                return c;
            } else {
                return -c;
            }
        }
        
        function less(c) {
            if (c < 0) {
                return 1;
            } else {
                return 0;
            }
        }
        
        function odd(a) {
            if (a % 2 === 0) {
                return 0;
            } else {
                return 1;
            }
        }
        
        function binary(N, Cnt) {
            let i, j = 1;
            let ans="";
            while(N!=0){
                i=N%2;
                N=Math.floor(N/2);
                ans=String(i)+ans;
                j+=1;
            }
            while(j<=Cnt){
            ans="0"+ans;
            j+=1;
            }
            return ans;
        }
        
        function bina(N, Cnt) {
            let i, j = 1,loop = 1;
            let ans="";
            i=N%2;
                N=Math.floor(N/2);
                    ans="_"+ans;
            while(N!=0){   
                i=N%2;
                N=Math.floor(N/2);
                ans=String(i)+ans;
                j+=1;
            }
            while(j<=Cnt){
            ans="0"+ans;
            j+=1;
            }
            return ans;
        }function booth(M,Q){
        
                let deck = 0;
                let A = 0;
                let Q1 = 0;
                let flag = 0;
                let n = 0;
                let b, c, d, e;
                let Q0 = 0;
                let abM, abQ;
                let negQ, negM;
                let nQ, nM;
                let loop, count = 1, Cnt;
                let ac,q,r,m; 
                let carry;
            
                abM = ab(M);
                abQ = ab(Q);
                negM = less(M);
                negQ = less(Q);
            
                while (true) {
                    b = po(n);
                    if (abM >= b) {
                        n += 1;
                        count += 1;
                    } else {
                        break;
                    }
                }
            
                b = po(count - 1);
                c = po(count);
                d = c - 1;
                e = b / 2;
                Cnt = count;
            
                nM = (d - abM) + 1;
                nQ = (d - abQ) + 1;
                let Morg = M, Qorg = Q;
                if (negM === 1 || negQ === 1) {
                    if (negM === 1) {
                        M = nM;
                    }
                    if (negQ === 1) {
                        Q = nQ;
                    }
                }
                let Morg1 = M, Qorg1 = Q;
                while (count !== 0) {
                    loop = 0;
                    flag = odd(Q);
                    if (flag === 1) {
                        Q0 = 1;
                    } else {
                        Q0 = 0;
                    }
                    if(count==Cnt){
        
                        ac = binary(A, Cnt);
                        q = binary(Q, Cnt);
                        m = binary(M , Cnt);
                        act="Initialization";
        
                        result[deck]={"count":count, "m":m,"ac":ac,"q":q,"Q1":Q1,"act":act};
                        deck +=1;
                    }
            
                    if (Q1 !== Q0) {
                        if (Q0 === 1 && Q1 === 0) {
                            while (loop !== 2) {
                                if (loop === 0) {
                                    if (negM === 1) {
                                        A = A + abM;
                                    } else {
                                        A = A + (d - M) + 1;
                                    }
            
                                    if (A > d) {
                                        A = A % c;
                                    }
            
                                    act="A = A - M";
                                }
            
                                if (loop === 1) {
                                    flag = odd(A);
                                    Q1 = odd(Q);
                                    Q = Math.floor(Q / 2);
                                    A = Math.floor(A / 2);
                                    if (flag === 1) {
                                        Q += b;
                                    }
            
                                    if (A >= e) {
                                        A += b;
                                    }
            
                                    act="Right Arithmetic Shift";
            
                                }
                                loop += 1;
            
                                ac = binary(A, Cnt);
                                q = binary(Q, Cnt);
                                m = binary(M , Cnt);
        
                               result[deck]={"count":count, "m":m,"ac":ac,"q":q,"Q1":Q1,"act":act};
                                deck +=1;
                     }
                    }
                     else {
                            while (loop !== 2) {
                                if (loop === 0) {
                                    if (negM === 1) {
                                        A = A + nM;
                                    } else {
                                        A = A + M;
                                    }
                                    if (A > d) {
                                        A = A % c;
                                    }
            
                                    act="A = A + M";
                                }
            
                                if (loop === 1) {
                                    flag = odd(A);
                                    Q1 = odd(Q);
                                    Q = Math.floor(Q / 2);
                                    A = Math.floor(A / 2);
                                    if (flag === 1) {
                                        Q += b;
                                    }
            
                                    if (A >= e) {
                                        A += b;
                                    }
            
                                    act="Right Arithmetic Shift";
            
                                }
                                loop += 1;
            
                                ac = binary(A, Cnt);
                                q = binary(Q, Cnt);
                                m = binary(M , Cnt);
            
                               result[deck]=result[deck]={"count":count, "m":m,"ac":ac,"q":q,"Q1":Q1,"act":act};
                                deck += 1;
                                
                     }
                        }
                 } else {
                    Q1 = odd(Q);
                        flag = odd(A);
                        Q = Math.floor(Q / 2);
                        A = Math.floor(A / 2);
                        if (flag === 1) {
                            Q += b;
                        }
            
                        if (A >= e) {
                            A += b;
                        }
            
                        act="Right Arithmetic Shift";
            
                                 ac = binary(A, Cnt);
                                 q = binary(Q, Cnt);
                                 m = binary(M , Cnt);
             
                                 result[deck]=result[deck]={"count":count, "m":m,"ac":ac,"q":q,"Q1":Q1,"act":act};
                                 deck +=1;
                                 
                                
                     }
                    count -= 1;
                }
            
                r=ac+" "+q;
                result[deck]={"count":count,"r":r};
        }

 function random(){
            let x = Math.floor(Math.random()*20 - 9);
            let y = Math.floor(Math.random()*20 - 9);
            var list = [];
        
            while(x==0){
                x = Math.floor(Math.random()*20 - 9);
            }
            while(y==0){
                y = Math.floor(Math.random()*20 - 9);
            }
        
            if(Math.abs(x)>Math.abs(y)){
                list[1] = y;
                list[0] = x;
            }
            else{
                list[0] = y;
                list[1] = x;
            }
        
            return list;
 }
