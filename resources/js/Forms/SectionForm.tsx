import React, {useState} from 'react'
import { addSection } from '../requests/Requette'

import Swal from 'sweetalert2'

export default function SectionForm() {
 const [section, setSection] = useState('')


  const submit = ()=>{
    const form = new FormData()
    form.append('name', section)
    addSection(form)
    .then(e=>e.json())
    .then(e=>{

        new CustomEvent('addsection', {
            detail:e,
            bubbles:true
         })
        Swal.fire(
            'donnee enregistrer avec succes!',
            'effectuee!',
            'success'
          )
          setSection('')
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
        <div className="text-xl font-bold pb-3">Ajout d'une Section</div>
        <div className="flex flex-col align-start">
        <label htmlFor="" className="text-start font-bold  pb-2 pt-3">Nom de la Section</label>
      <input type="text" className="border-2 rounded outline-0 p-2" value={section} onInput={(e)=>{
        setSection(e.target.value)
      }} />
        </div>
        <div className="pt-3 pb-3">
            <button className="rounded bg-blue-600 p-2 text-white" onClick={(e)=>{
                if(section.length==0){
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
