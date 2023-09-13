import React from 'react'


export default function NavBar() {
  return (
    <div className="p-3 bg-gray-900 lg:grid md:grid lg:grid-cols-4 md:grid-cols-3  gap-2 text-white font-bold">
            <div className="px-2"> Gestion Scolaire</div>
            <div className="px-2 flex justify-center gap-4 col-span-2">
                <div>Home</div>
                <div>Eleves</div>
                <div>Frais</div>
                <div>Payements</div>
            </div>
            <div>
                <div className="p-2  text-white flex justify-end px-8">
                    <div className="rounded-full border-2 p-2 border-teal-50 text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                        </svg>
                    </div>

                </div>
            </div>
    </div>
  )
}
