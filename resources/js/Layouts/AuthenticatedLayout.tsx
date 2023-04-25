import { PropsWithChildren, ReactNode } from 'react';
import ApplicationLogo from '@/Components/ApplicationLogo';
import { Link } from '@inertiajs/react';
import { User } from '@/types';
import "@/../scss/Component/AuthenticatedLayout.scss"
import "@/../scss/Component/Nav.scss"

export default function Authenticated({ user, title, children, buttons }: PropsWithChildren<{ user: User, title?: ReactNode, buttons?: ReactNode }>) {

    return (
        <div className="">
            <nav className="navbar-laravel">
                <div className="mx-auto px-4 d-flex justify-content-between py-2">
                    <div className="justify-content-between">
                        <div className="d-flex align-items-center">
                            <div className="shrink-0 flex items-center">
                                <Link href={route('top_page')}>
                                    <ApplicationLogo className="block h-9 w-auto" />
                                </Link>
                            </div>

                            {title && <div className="vertical-line mx-4"/>}

                            <div className="">
                                {title &&  <h1 className="page-title text-dark text-center my-0">{title}</h1>}
                            </div>
                        </div>
                    </div>
                    <div className="justify-content-between">
                        {buttons && <div className="">
                            {buttons}
                        </div>}
                    </div>
                </div>
            </nav>

            <main className="pt-4">{children}</main>
        </div>
    );
}
