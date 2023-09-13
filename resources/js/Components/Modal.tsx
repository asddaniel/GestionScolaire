import React, {useState} from 'react'

type Props = {
    children?: React.ReactNode,
    openModal?:boolean,
    handleModalext?:(val:boolean)=>void
}
export default function Modal({children, openModal, handleModalext}: Props) {
    const [isOpen, setIsopen] = useState(openModal??false)
    const handleModal= ()=>{
        setIsopen(false)
        handleModal? handleModalext(false):''
    }
  return (
    <div className={"overflow-y-auto p-3 bg-gray-500/50 "+(isOpen?'fixed inset-0 z-10':'hidden')}>
        <div className="grid grid-cols-3 gap-2">
            <div className="col-start-2 p-2 bg-white rounded text-gray-900">
            {children}
                <div className=" flex justify-end">
                    <button className="rounded p-2 bg-blue-900 text-white" onClick={handleModal}>Fermer</button>
                </div>
            </div>

        </div>

    </div>
  )
}
