import { createContext } from 'react';

export const SubMenuContext = createContext([
    {name:"Eleves", quantite:200, key:0, modal:false},
    {name:"Frais", quantite:200, key:1, modal:false},
    {name:"Options", quantite:200, key:1, modal:false},
    {name:"Classes", quantite:200, key:1, modal:false},
  ]);