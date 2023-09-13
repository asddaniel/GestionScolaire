import React, {useState, useEffect} from 'react'
import { addOption, getSection } from '../requests/Requette'

import Swal from 'sweetalert2'
type ThinData = {
    name:string,
    id?:number
}

export default function OptionForm() {
 const [option, setOption] = useState({name:'', section_id:''})
 const [section, setSection] = useState<ThinData[]>()
 useEffect(()=>{
    getSection()
        .then(e=>e.json())
        .then(e=>{
            setSection(e)

        })
 })

  const submit = ()=>{
    const form = new FormData()
    form.append('name', option.name)
    form.append('section_id', option.section_id)
    addOption(form)
    .then(e=>e.text())
    .then(e=>{

       
        Swal.fire(
            'donnee enregistrer avec succes!',
            'effectuee!',
            'success'
          )
          setOption({name:'', section_id:''})
    })
    .catch((error)=>{
        console.log(error)
        Swal.fire({
            icon: 'error',
            title: 'erreur.',
            text: JSON.stringify(error),
            footer: '<a href="">Why do I have this issue?</a>'
          })
    })
  }

  return (
    <div className="bg-white p-3 flex flex-col aligns-start">
        <div className="text-xl font-bold pb-3">Ajout d'une Option</div>
        <div className="flex flex-col align-start">
        <label htmlFor="" className="text-start font-bold  pb-2 pt-3">Nom de l'option</label>
      <input type="text" className="border-2 rounded outline-0 p-2" value={option.name} onInput={(e)=>{
        setOption({...option, name:e.target?.value})
      }} />
        </div>
        <div className="flex flex-col align-start pt-3">
            <label htmlFor="" className="text-start font-bold  pb-2 pt-3">Section</label>
            <select name="" id="" className="border-2 rounded p-2">
            <option value="" >selectionner une option</option>
                {section?.map((e:{id:number, name:string})=>(

                    <option value={e.id} onChange={(e)=>{
                        setOption({...option, section_id:e.target.value})
                    }}>{e.name}</option>

                ))}

            </select>
         </div>
        <div className="pt-3 pb-3">
            <button className="rounded bg-blue-600 p-2 text-white" onClick={(e)=>{
                if(option.name.length==0){
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'veillez remplir correctement la valeur',
                        footer: 'ressayer'
                      })
                    return
                }
                submit()
            }}>Enregistrer</button>
        </div>

    </div>
  )


}
