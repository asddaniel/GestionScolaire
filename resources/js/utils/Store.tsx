import { createSlice } from "@reduxjs/toolkit";
const default_data = {
sections:[],
options:[],
eleves:[],
frais:[],
valeur:0
}
const DataReducer = {
    add_section:(state, action)=>{
        state.sections =[...state.sections, action.payload]

    },
    add_option:(state, action)=>{
        state.options =[...state.options, action.payload]

    },
    add_eleve:(state, action)=>{
        state.eleves =[...state.eleves, action.payload]

    },
}
export const DataSlice = createSlice({
    name: 'data',
    initialState: default_data,
    reducers: DataReducer
   })

   export const {add_section, add_eleve, add_option} = DataSlice.actions