import React, {useState, useEffect, useContext} from 'react'
import Card from '../Components/Card'
import Tab from '../Components/Tab'
import Table from '../Components/Table'
import { SubMenuContext } from '../utils/SubMenuContext'
import SectionForm from '../Forms/SectionForm'
import EleveForm from '../Forms/EleveForm'
import OptionForm from '../Forms/OptionForm'
import {
    QueryClient,
    QueryClientProvider,
  } from '@tanstack/react-query'
import DataContext  from '../utils/DataContext'

type Menu = {
    name:string,
    quantite:number,
    key:number,
    modal:boolean,
    modalContent?:React.ReactNode
}


export default function Home() {
    const [submenu, setsubmenu] = useState<Menu[]|[]>([])
    const [data, setData] = useState<{students:any[], sections:[], options:[]}>()
    const loadSection = ()=>{
        document.getElementById('root')?.addEventListener('addsection', (e)=>{
            console.log(e)
            alert(e)
        })
    }

    const addStudent = (value:any)=>{
        const nstudent = [...data.students, value]
       setData({...data, students:nstudent});
    }
    useEffect(()=>{
        loadSection()
       setsubmenu([
         {name:"Eleves", quantite:200, key:0, modal:false, modalContent:<EleveForm></EleveForm>},
         {name:"Frais", quantite:200, key:1, modal:false, modalContent:<SectionForm></SectionForm>},
         {name:"Options", quantite:200, key:1, modal:false, modalContent:<OptionForm></OptionForm>},
         {name:"Classes", quantite:200, key:1, modal:false, modalContent:<SectionForm></SectionForm>},
       ])
    }, [])
    const changeModal=(val:{val:boolean, name:string})=>{
        new CustomEvent('addsection', {
            detail:'ok',
            bubbles:true
         })
        const nData = submenu
       nData.find((e:{name:string})=>e.name===val.name).modal = val.val
       console.log(nData)
       setsubmenu(nData)
    }
  return (
    <div className="pt-2 pb-2 px-5">
        <div className="p-2 lg:grid md:grid lg:grid-cols-4 md:grid-cols-2 gap-2">
<DataContext.Provider  value = {{ data, addStudent }}>
{ submenu.map((el)=>(
           <div key={el.key}>
                <Card name={el.name} quantite={el.quantite} event={changeModal} content={el.modalContent}></Card>
           </div>
        ))}


</DataContext.Provider>

    </div>
    <Tab></Tab>
    <div className="px-2">
        <Table></Table>
    </div>

    </div>


  )
}
