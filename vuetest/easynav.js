//here get sction if dept has section otherwise it will be return unit 
                               $('.dept').change(function()
                    {
                               
                              var did=$(this).val();
                             // var dname=$(this).attr('dept');
                             //alert(did);
                              

                               $.ajax({

                                    url:'<?= base_url() ?>section/sectionbydept',
                                    method:'get',
                                    data:{did:did},

                                    success:function(unit)
                                    {
                                       // alert(unit);
                                           // id='#'+show;
                                        $('#section').html(unit);
                                    
                                         console.log(unit);
                                         
                                    },
                                   error:function(unit)
                                    {
                                        alert('error occurs');
                                    }


                        })
                            


                        })
                        
                        
                        
                        //all unit by section
                        
                               $('.sec').mouseleave(function()
                    {
                               
                              var sid=$('#getsec').val();
                             // var dname=$(this).attr('dept');
                             
                              

                               $.ajax({

                                    url:'<?= base_url() ?>unit/unitbysec',
                                    method:'get',
                                    data:{sid:sid},

                                    success:function(section)
                                    {
                                        $('#unit').html(section);
                                         console.log(section);
                                    },
                                   error:function(section)
                                    {
                                        alert('error occurs');
                                    }


                        })
                            


                        })
                        

  