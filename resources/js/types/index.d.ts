export interface User {
    id: number;
    name: string;
    login_id: string;
}

export type PageProps<T extends Record<string, unknown> = Record<string, unknown>> = T & {
    auth: {
        user: User;
    };
};

export interface MessageParams {
    path: string;
    value: any;
    originalValue: any;
    label: string;
    type: string;
}

export interface PaginationResource<T>{
    collection: Array<T>;
    pagination: {
        total: number;
        count: number;
        perPage: number;
        currentPage: number;
        totalPages: number;
    }
}
