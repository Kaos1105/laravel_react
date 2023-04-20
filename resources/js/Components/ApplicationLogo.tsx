import {ImgHTMLAttributes} from 'react';
import logo from "../../assets/images/qcsystem_logo.png"

export default function ApplicationLogo(props: ImgHTMLAttributes<HTMLImageElement>) {
    return (
        <img alt="app logo" src={logo} className="notice-image"/>
    );
}

