import React, {useContext, useEffect, useState} from 'react'
import DataContext from '../utils/DataContext'
import { getOption, getSection } from '../requests/Requette'
import { useSelector, useDispatch } from 'react-redux'
import { addEleve } from '../requests/Requette'

type ThinData = {
    name:string,
    id?:number
}

export default function EleveForm() {
    const data = useContext(DataContext)
    const [section, setSection] = useState<ThinData[]>()
    const [option, setOption] = useState<ThinData[]>()
    useEffect(()=>{
        getSection()
        .then(e=>e.json())
        .then(e=>{
            setSection(e)

        })
        getOption()
        .then(e=>e.json())
        .then(e=>{
            setOption(e)


        })
       })

  return (
    <div className="bg-white p-2 flex flex-col">
        <div className="text-xl font-bold pb-3">Ajout d'un Eleve </div>
        <div className="flex flex-col align-start">
            <label htmlFor="" className="text-start font-bold  pb-2 pt-3">Nom de l'eleve</label>
            <input type="text" placeholder="ex: John doe" className="border-2 p-2 rounded" />
         </div>
         <div className="flex flex-col align-start pt-3">
            <label htmlFor="" className="text-start font-bold  pb-2 pt-3">option</label>
            <select name="" id="" className="border-2 rounded p-2">
                <option value="">selectionner une option</option>
                <option value="">primaire</option>
                <option value="">secondaire</option>
            </select>
         </div>
         <div className="flex flex-col align-start pt-3">
            <label htmlFor="" className="text-start font-bold  pb-2 pt-3">Section</label>
            <select name="" id="" className="border-2 rounded p-2">
            <option value="">selectionner une option</option>
                {section?.map((e:{id:number, name:string})=>(

                    <option value={e.id}>{e.name}</option>

                ))}

            </select>
         </div>
         <div className="pt-3 pb-3">
            <button className="p-2 rounded bg-blue-600 text-white">Enregistrer</button>
         </div>
    </div>
  )
}
