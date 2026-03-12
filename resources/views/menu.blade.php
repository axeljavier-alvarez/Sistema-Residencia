<x-app-layout>
    <div class="py-12 bg-gray-50 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            

            <img src="{{ asset('imagenes/icono_muni.png') }}"
            alt="Icono"
            class="w-20 md:w-32 mx-auto block">

            <div class="mt-2 text-center mb-12">
                <h1 class="text-4xl font-extrabold text-gray-900 mb-2">
                    Sistema de Constancia de Residencia
                </h1>
                <p class="text-lg text-gray-600">
                    Seleccione una opción para continuar.
                </p>
            </div>

            <div class="mt-10 grid grid-cols-1 md:grid-cols-3 gap-8">
                
                <a href="{{ route('solicitudes.create') }}" 
                    class="group bg-white p-8 rounded-2xl shadow-sm border border-gray-100 hover:shadow-xl hover:border-blue-500 transition-all duration-300">
                        <div class="flex flex-col items-center text-center">
                            <div class="mb-4 p-4 bg-blue-50 text-blue-600 rounded-full">
                                <img
                                    src="{{ asset('imagenes/ver_solicitud.svg') }}"
                                    alt="Icono"
                                    class="w-12 md:w-16 mx-auto relative drop-shadow-xl"
                                    style="filter: brightness(0) saturate(100%) invert(38%) sepia(77%) saturate(4702%) hue-rotate(198deg) brightness(97%) contrast(101%);"
                                >
                            </div>
                            <h2 class="text-2xl font-bold text-gray-800 mb-2">Nueva Solicitud</h2>

                            <p class="text-slate-500 leading-relaxed text-sm md:text-base">
                                Llene el <strong>formulario de registro</strong> para obtener su número de solicitud. Deberá elegir su tipo de trámite y subir sus documentos en formato <strong>PDF o JPG</strong> para iniciar el proceso.
                            </p>
                        </div>
                    </a>

                <a href="{{ route('solicitudes.publica') }}" class="group bg-white p-8 rounded-2xl shadow-sm border border-gray-100 hover:shadow-xl hover:border-green-500 transition-all duration-300">
                    <div class="flex flex-col items-center text-center">
                        <div class="mb-4 p-4 bg-green-50 text-green-600 rounded-full group-hover:bg-green-600 group-hover:text-white transition-colors duration-300">

                             <img
                    src="{{ asset('imagenes/consultar_solicitud.svg') }}"
                    alt="Icono"
                    class="w-12 md:w-16 mx-auto relative drop-shadow-xl" 
                    style="filter: invert(48%) sepia(79%) saturate(2476%) hue-rotate(86deg) brightness(118%) contrast(119%);"
                >
                            
                        </div>
                        

                        <h2 class="text-2xl font-bold text-[#1e293b] mb-3 group-hover:text-amber-600 transition-colors">
                            Consultar Estado
                        </h2>
                        
                        <p class="text-slate-500 leading-relaxed text-sm md:text-base">
                            Vea el <strong>estado de su solicitud</strong>; solo ingrese su número de <strong>DPI</strong> y el número de solicitud que recibió en su correo electrónico.
                        </p>

                    </div>
                </a>

                <a href="{{ route('interno.dashboard.index') }}" 
                    class="group bg-white p-8 rounded-2xl shadow-sm border border-gray-100 hover:shadow-xl hover:border-gray-500 transition-all duration-300">
                        <div class="flex flex-col items-center text-center">
                            <div class="mb-4 p-4 bg-gray-50 text-gray-600 rounded-full">
                                <img
                                    src="{{ asset('imagenes/sistema_solicitudes.svg') }}"
                                    alt="Icono"
                                    class="w-12 md:w-16 mx-auto relative drop-shadow-xl"
                                >
                            </div>

                            <h2 class="text-2xl font-bold text-[#1e293b] mb-3">
                                Iniciar Sesión
                            </h2>
                            
                            <p class="text-slate-500 leading-relaxed text-sm md:text-base">
                                Acceda al sistema para <strong>administrar solicitudes</strong>, asignar <strong>visitas de campo</strong>, control de estados, <strong>autorización y emisión</strong> de constancias de residencia.
                            </p>

                        </div>
                    </a>

            </div>
        </div>
    </div>
</x-app-layout>