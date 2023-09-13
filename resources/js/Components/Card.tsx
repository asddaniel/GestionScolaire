import React, {useEffect, useState} from 'react'
import Modal from './Modal'

type Props = {name:string, quantite:number, content?:React.ReactNode, event:(val:{val:boolean, name:string})=>void}

export default function Card(props:Props) {
    const [modalState, setmodalState] = useState(false)

    const openModal = (val)=>{
        //  props.event


        setmodalState(val)
        // console.log('ok')

    }
  return (
<div className="max-w-xs rounded-md shadow-md dark:bg-gray-900 dark:text-gray-100">

	<div className="flex flex-col justify-between p-6 space-y-8">
		<div className="space-y-2">
			<h2 className="text-3xl font-semibold tracki">{props.name}</h2>
			<p className="dark:text-gray-100">{props.quantite}</p>
		</div>
        <div className="grid grid-col-2 gap-2">
            <button className="px-4 py-2 text-white bg-blue-600 rounded-md" onClick={(e)=>{openModal(true)}}>Ajouter</button>

        </div>

	</div>

    {modalState?<Modal  openModal={true} handleModalext={openModal}> {props?.content} </Modal>:''}

</div>
  )
}
