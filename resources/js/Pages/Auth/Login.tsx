import { useEffect, FormEventHandler } from 'react';
import GuestLayout from '@/Layouts/GuestLayout';
import InputError from '@/Components/InputError';
import InputLabel from '@/Components/InputLabel';
import PrimaryButton from '@/Components/PrimaryButton';
import TextInput from '@/Components/TextInput';
import { Head, useForm } from '@inertiajs/react';
import ApplicationLogo from "@/Components/ApplicationLogo";
import {useTranslation} from "react-i18next";
import * as yup from 'yup';
import { router } from '@inertiajs/react'
import {useFormik} from "formik";

const loginScheme = yup.object().shape({
    login_id: yup.string().required('LoginID is required'),
    password: yup.string().required('Password is required'),
});

export default function Login() {
    const { data, setData, post, processing, errors:backendErrors, reset, isDirty, clearErrors } = useForm( {
        login_id: '',
        password: ''
    });

    const formik = useFormik({
        initialValues: {...data},
        validateOnBlur: true,
        validationSchema: loginScheme,
        onSubmit: (value: typeof formik.initialValues) => {
            if(formik.isValid){
                // router.post(route('login'), value);
                post(route('login'));
            }
        },
    });

    const {t} = useTranslation();

    useEffect(() => {
        return () => {
            reset('password');
        };
    }, []);

    useEffect(()=>{
        clearErrors();
    }, [isDirty])

    return (
        <GuestLayout>
            <Head title="Log in" />
            <div className="container">
                <div className="row">
                    <div className="col">
                        <ApplicationLogo/>
                    </div>
                    <div className="col card">
                        <form onSubmit={formik.handleSubmit} className="card-body">
                            <div>
                                <div className="d-flex flex-row">
                                    <InputLabel className="form-label" value="Login Id" />
                                    <TextInput
                                        id="login_id"
                                        name="login_id"
                                        className="form-control"
                                        autoComplete="username"
                                        isFocused={true}
                                        onChange={(e) => {setData('login_id', e.target.value);formik.handleChange(e);}}
                                        onBlur={formik.handleBlur}
                                        value={formik.values.login_id}
                                    />
                                </div>
                                <InputError message={backendErrors.login_id} className="mt-2" />
                                <InputError message={formik.errors.login_id} className="mt-2" />
                            </div>

                            <div className="mt-4">
                                <div className="d-flex flex-row">
                                    <InputLabel className="form-label" htmlFor="password" value="Password" />
                                    <TextInput
                                        id="password"
                                        type="password"
                                        name="password"
                                        className="form-control"
                                        autoComplete="current-password"
                                        onChange={(e) => {setData('password', e.target.value);formik.handleChange(e);}}
                                        onBlur={formik.handleBlur}
                                        value={formik.values.password}
                                    />
                                </div>
                                <InputError message={backendErrors.password} className="mt-2" />
                                <InputError message={formik.errors.password} className="mt-2" />
                            </div>

                            <PrimaryButton className="mt-2 align-content-center" disabled={processing || !formik.isValid} type="submit">
                                Log in
                            </PrimaryButton>
                        </form>
                    </div>
                </div>
            </div>
        </GuestLayout>
    );
}
