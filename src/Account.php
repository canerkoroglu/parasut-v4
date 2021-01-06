<?php
namespace Parasut;

class Account extends Base
{
    public function index($pagenumber=1,$size=15,$data = [])
    {
        return $this->client->request(
            'contacts?page%5Bnumber%5D='.$pagenumber.'&page%5Bsize%5D='.$size,
            $data,
            'GET'
        );
    }
    
    public function create($data)
    {
        return $this->client->request(
            'contacts',
            $data,
            'POST'
        );
    }

    public function show($id , $data = [])
    {
        return $this->client->request(
            'contacts/' . $id,
            $data,
            'GET'
        );
    }

    public function update($id , $data = [])
    {
        return $this->client->request(
            'contacts/' . $id,
            $data,
            'PUT'
        );
    }
}
