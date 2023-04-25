import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import {Head, Link} from '@inertiajs/react';
import { PageProps } from '@/types';
import {NotificationOutlined, HomeOutlined} from '@ant-design/icons';
import "@/../scss/Component/Nav.scss"

export default function Dashboard({ auth }: PageProps) {
    return (
        <AuthenticatedLayout
            user={auth.user}
            buttons={
                <div className="ml-3 relative">
                    <Link href={route("logout")} method="post" as="button" className="inline-flex items-center btn btn-default float-end mr-2" type="button">
                        Log Out
                    </Link>
                </div>
            }
            title="Home"
        >
            <Head title="Dashboard" />

            <div className="py-12">
                <div className="w-100 d-flex">
                    <div className="w-25 mx-4">
                        <div className="navbar-collapse">
                            <ul className="aside-navbar-nav m-0">
                                <li className="nav-item">
                                    <div className="card-btn">
                                        <Link href='/' className="nav-link d-flex justify-content-between">
                                            <div className="d-flex align-items-center">
                                                <div className="mr-2 mb-2"><NotificationOutlined /></div>
                                                <span className="nav-link-title">システム管理者からのお知らせ</span>
                                            </div>
                                            <div className="badge bg-primary nav-item-number d-flex">
                                                <span className="px-1 py-1">{5}</span>
                                            </div>
                                        </Link>
                                    </div>
                                </li>
                                <li className="nav-item">
                                    <div className="card-btn">
                                        <Link href='/' className="nav-link d-flex justify-content-between">
                                            <div className="d-flex align-items-center">
                                                <div className="mr-2 mb-2"><HomeOutlined /></div>
                                                <span className="nav-link-title">利用会社マスタ</span>
                                            </div>
                                            <div className="badge bg-primary nav-item-number d-flex">
                                                <span className="px-1 py-1">{5}</span>
                                            </div>
                                        </Link>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div className="w-75 mx-4">
                        <div className="bg-white overflow-hidden shadow-sm">
                            <div className="p-6 text-gray-900">You're logged in!</div>
                        </div>
                    </div>
                </div>
            </div>
        </AuthenticatedLayout>
    );
}
